-- Chỉnh sửa thông tin shop
CREATE PROCEDURE UpdateShopInfo
    @ShopID INT,
    @ShopName NVARCHAR(200),
    @Description NVARCHAR(MAX),
    @Address NVARCHAR(200)
AS
BEGIN
    UPDATE Shops
    SET 
        ShopName = @ShopName,
        Description = @Description,
        Address = @Address,
        UpdatedAt = GETDATE()
    WHERE 
        ShopID = @ShopID;

    PRINT 'Chỉnh sửa thông tin shop thành công!';
END;
