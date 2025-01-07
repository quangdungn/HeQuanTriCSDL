CREATE FUNCTION GetTotalUserCount ()
RETURNS INT
AS
BEGIN
    DECLARE @TotalUsers INT;

    SELECT @TotalUsers = COUNT(*)
    FROM Users
    WHERE UserType != 2;

    RETURN @TotalUsers;
END;
