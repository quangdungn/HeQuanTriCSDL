CREATE FUNCTION dbo.CheckPasswordLength
(
    @Password NVARCHAR(200)
)
RETURNS BIT
AS
BEGIN
    -- Trả về giá trị 1 nếu mật khẩu hợp lệ, ngược lại trả về 0
    RETURN CASE 
        WHEN LEN(@Password) >= 6 THEN 1
        ELSE 0
    END;
END;
