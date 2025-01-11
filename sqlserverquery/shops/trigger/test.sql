CREATE FUNCTION dbo.CheckUserIDExistsInShops
(
    @UserID INT
)
RETURNS BIT
AS
BEGIN
    DECLARE @Exists BIT;

    -- Kiểm tra nếu UserID đã tồn tại trong bảng Shops
    IF EXISTS (
        SELECT 1
        FROM Shops
        WHERE UserID = @UserID
    )
        SET @Exists = 1; -- UserID đã tồn tại
    ELSE
        SET @Exists = 0; -- UserID chưa tồn tại

    RETURN @Exists;
END;
GO
