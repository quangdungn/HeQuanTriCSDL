CREATE TRIGGER trg_CreateShopOnUserInsert
ON Users
AFTER INSERT
AS
BEGIN
    INSERT INTO Shops (UserID, ShopName, Description, Address)
    SELECT UserID, 'Default Shop Name', 'Default Description', NULL
    FROM inserted
    WHERE UserType = 1;
END;
