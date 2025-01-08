CREATE TRIGGER trg_UpdateShopDescription
ON Shops
AFTER INSERT
AS
BEGIN
    UPDATE Shops
    SET Description = 'Đây là một mô tả mặc định cho ' + ShopName
    WHERE ShopID IN (SELECT ShopID FROM inserted);
END;