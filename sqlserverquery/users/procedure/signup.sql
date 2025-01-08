CREATE PROCEDURE SP_RegisterUser
    @FullName NVARCHAR(100),
    @Email NVARCHAR(100),
    @PhoneNumber NVARCHAR(20),
    @Password NVARCHAR(200),
    @UserType TINYINT = 0
AS
BEGIN
    IF dbo.IsEmailExists(@Email) = 1
    BEGIN
        PRINT 'Email đã tồn tại trong hệ thống.';
        RETURN;
    END;

    INSERT INTO Users (FullName, Email, PhoneNumber, [Password], UserType, CreatedAt)
    VALUES (@FullName, @Email, @PhoneNumber, HASHBYTES('SHA2_256', @Password), @UserType, GETDATE());

    PRINT 'Đăng ký thành công.';
END;
