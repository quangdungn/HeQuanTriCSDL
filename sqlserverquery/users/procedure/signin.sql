CREATE PROCEDURE sp_LoginUser
    @Email NVARCHAR(100),
    @Password VARCHAR(200)
AS
BEGIN
    SET NOCOUNT ON;

    IF EXISTS (SELECT 1 FROM Users WHERE Email = @Email AND [Password] = @Password)
        SELECT 'Đăng nhập thành công' AS Message, UserID, FullName, Email, UserType
        FROM Users
        WHERE Email = @Email;
    ELSE
        SELECT 'Sai tài khoản hoặc mật khẩu' AS Message;
END;
