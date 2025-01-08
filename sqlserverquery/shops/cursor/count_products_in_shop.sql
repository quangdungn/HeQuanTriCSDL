DECLARE @ShopID INT;
DECLARE @ShopName NVARCHAR(200);
DECLARE @ProductCount INT;

DECLARE ShopCursor CURSOR FOR
SELECT ShopID, ShopName
FROM Shops;

OPEN ShopCursor;

FETCH NEXT FROM ShopCursor INTO @ShopID, @ShopName;

WHILE @@FETCH_STATUS = 0
BEGIN
    SELECT @ProductCount = COUNT(*)
    FROM Products
    WHERE ShopID = @ShopID;

    PRINT 'Shop: ' + @ShopName + ' có ' + CAST(@ProductCount AS NVARCHAR) + ' sản phẩm.';

    FETCH NEXT FROM ShopCursor INTO @ShopID, @ShopName;
END;

CLOSE ShopCursor;
DEALLOCATE ShopCursor;