CREATE FUNCTION dbo.IsEmailExists(@Email NVARCHAR(100))
RETURNS BIT
AS
BEGIN
    DECLARE @Exists BIT;

    SELECT @Exists = 
    CASE 
        WHEN EXISTS (SELECT 1 FROM Users WHERE Email = @Email) 
        THEN 1 
            ELSE 0 
        END;

    RETURN @Exists;
END;