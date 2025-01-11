-- Đăng ký người dùng mới vào hệ thống.
CREATE PROCEDURE SP_RegisterUser
    @FullName NVARCHAR(100),
    @Email NVARCHAR(100),
    @PhoneNumber NVARCHAR(20),
    @Password NVARCHAR(200),
    @UserType TINYINT = 0
AS
BEGIN
    SET NOCOUNT ON;

    IF dbo.IsValidEmail(@Email) = 0
    BEGIN
        RAISERROR ('Email không đúng định dạng.', 16, 1);
        RETURN;
    END;

    IF dbo.IsEmailExists(@Email) = 1
    BEGIN
        RAISERROR ('Email đã tồn tại trong hệ thống.', 16, 1);
        RETURN;
    END;

    IF dbo.CheckPasswordLength(@Password) = 0
    BEGIN
        RAISERROR ('Mật khẩu phải có ít nhất 6 ký tự.', 16, 1);
        RETURN;
    END;

    BEGIN TRY
        INSERT INTO Users (FullName, Email, PhoneNumber, [Password], UserType, CreatedAt)
        VALUES (@FullName, @Email, @PhoneNumber, HASHBYTES('SHA2_256', @Password), @UserType, GETDATE());

        PRINT 'Đăng ký thành công.';
        
    END TRY
    BEGIN CATCH
        RAISERROR ('Đã xảy ra lỗi khi đăng ký tài khoản.', 16, 1);
    END CATCH;
END;