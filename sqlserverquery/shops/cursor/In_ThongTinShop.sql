CREATE PROCEDURE PrintUserShopsInfo (@UserID INT)
AS
BEGIN
    DECLARE @ShopID INT, @ShopName NVARCHAR(200), @Description NVARCHAR(MAX), @Address NVARCHAR(200);

    DECLARE user_shops_cursor CURSOR FOR
    SELECT ShopID, ShopName, Description, Address
    FROM Shops
    WHERE UserID = @UserID;

    OPEN user_shops_cursor;

    FETCH NEXT FROM user_shops_cursor INTO @ShopID, @ShopName, @Description, @Address;

    WHILE @@FETCH_STATUS = 0
    BEGIN
        -- In thông tin cửa hàng của người dùng
        PRINT 'ShopID: ' + CAST(@ShopID AS NVARCHAR) + ', ShopName: ' + @ShopName + ', Address: ' + @Address + ', Description: ' + @Description;

        -- Lấy bản ghi tiếp theo
        FETCH NEXT FROM user_shops_cursor INTO @ShopID, @ShopName, @Description, @Address;
    END;

    -- Đóng và giải phóng cursor
    CLOSE user_shops_cursor;
    DEALLOCATE user_shops_cursor;
    
    PRINT 'Hoàn thành việc in thông tin cửa hàng của người dùng có UserID = ' + CAST(@UserID AS NVARCHAR);
END;
