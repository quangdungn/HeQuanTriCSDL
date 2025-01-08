CREATE FUNCTION GetTotalShopsByUser (@UserID INT)
RETURNS INT
AS
BEGIN
    DECLARE @TotalShops INT;

    IF EXISTS (
        SELECT 1 
        FROM Users 
        WHERE UserID = @UserID AND UserType = 1
    )
    BEGIN
        SELECT @TotalShops = COUNT(*)
        FROM Shops
        WHERE UserID = @UserID;
    END
    ELSE
    BEGIN
        SET @TotalShops = 0;
    END;

    RETURN @TotalShops;
END;
