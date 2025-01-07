CREATE FUNCTION GetTotalShopsByUser (@UserID INT)
RETURNS INT
AS
BEGIN
    DECLARE @TotalShops INT;

    -- Kiểm tra nếu User là chủ shop, đếm số lượng cửa hàng
    IF EXISTS (
        SELECT 1 
        FROM Users 
        WHERE UserID = @UserID AND UserType = 1 -- Chỉ kiểm tra chủ shop
    )
    BEGIN
        SELECT @TotalShops = COUNT(*)
        FROM Shops
        WHERE UserID = @UserID;
    END
    ELSE
    BEGIN
        -- Nếu không phải chủ shop, trả về 0
        SET @TotalShops = 0;
    END;

    RETURN @TotalShops;
END;
