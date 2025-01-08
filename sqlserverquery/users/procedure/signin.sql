CREATE PROCEDURE SP_UserLogin
    @Email NVARCHAR(100),
    @Password NVARCHAR(200)
AS
BEGIN
    IF dbo.FN_ValidateUserCredentials(@Email, @Password) = 1
    BEGIN
        SELECT UserID, FullName, Email, UserType
        FROM Users
        WHERE Email = @Email;

        PRINT 'Đăng nhập thành công.';
    END
    ELSE
    BEGIN
        PRINT 'Email hoặc mật khẩu không chính xác.';
    END;
END;
