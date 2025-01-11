-- Tự động câp nhật thời gian sửa đổi cho các shop sau khi thực hiện update
CREATE TRIGGER trg_UpdateShopTimestamp
ON Shops
AFTER UPDATE
AS
BEGIN
    UPDATE Shops
    SET UpdatedAt = GETDATE()
    WHERE ShopID IN (SELECT ShopID FROM inserted);

    PRINT 'Cập nhật thời gian sửa đổi thành công cho các shop!';
END;
