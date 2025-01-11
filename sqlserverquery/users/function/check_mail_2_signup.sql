CREATE FUNCTION dbo.IsValidEmail(@Email NVARCHAR(100))
RETURNS BIT
AS
BEGIN
    IF @Email LIKE '%_@__%.__%'
        RETURN 1
    RETURN 0
END;