CREATE PROCEDURE RegisterUser
    @FullName NVARCHAR(100),
    @Email NVARCHAR(100),
    @PhoneNumber NVARCHAR(20),
    @Password NVARCHAR(200)
AS
BEGIN
    IF EXISTS (SELECT 1 FROM Users WHERE Email = @Email)
    BEGIN
        PRINT 'Email này đã tồn tại!';
        RETURN;
    END

    INSERT INTO Users (FullName, Email, PhoneNumber, [Password], CreatedAt)
    VALUES (@FullName, @Email, @PhoneNumber, HASHBYTES('SHA2_256', @Password), GETDATE());

    PRINT 'Đăng ký tài khoản thành công!';
END;