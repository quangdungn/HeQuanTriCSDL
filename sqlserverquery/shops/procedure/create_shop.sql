CREATE PROCEDURE SP_CreateShop
    @UserID INT,
    @ShopName NVARCHAR(200),
    @Description NVARCHAR(MAX),
    @Address NVARCHAR(200)
AS
BEGIN
    -- Kiểm tra UserID có tồn tại và là chủ shop không
    IF NOT EXISTS (
        SELECT 1 
        FROM Users 
        WHERE UserID = @UserID AND UserType = 1
    )
    BEGIN
        PRINT 'Người dùng không phải là chủ shop hoặc không tồn tại.';
        RETURN;
    END;

    -- Kiểm tra ShopName không được để trống
    IF @ShopName IS NULL OR LTRIM(RTRIM(@ShopName)) = ''
    BEGIN
        PRINT 'Tên cửa hàng không được để trống.';
        RETURN;
    END;

    -- Thêm mới cửa hàng
    INSERT INTO Shops (UserID, ShopName, Description, Address, CreatedAt)
    VALUES (@UserID, @ShopName, @Description, @Address, GETDATE());

    PRINT 'Cửa hàng mới đã được tạo thành công.';
END;
