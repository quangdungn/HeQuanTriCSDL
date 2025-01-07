CREATE VIEW PublicShopInfo AS
SELECT 
    ShopID,
    ShopName,
    Description AS ShopDescription,
    Address AS ShopAddress,
    CreatedAt AS ShopCreatedAt,
    UpdatedAt AS ShopUpdatedAt
FROM 
    Shops;