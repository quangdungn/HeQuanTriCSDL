--Kiẻm tra email và password của người dùng khi đăng nhập
CREATE FUNCTION FN_ValidateUserCredentials (
    @Email NVARCHAR(100),
    @Password NVARCHAR(200)
)
RETURNS BIT
AS
BEGIN
    IF EXISTS (
        SELECT 1 
        FROM Users 
        WHERE Email = @Email 
          AND [Password] = HASHBYTES('SHA2_256', @Password)
    )
        RETURN 1;
    RETURN 0;
END;
