CREATE VIEW ShopInfoByOwners AS
SELECT 
    s.ShopID,
    s.ShopName,
    s.Description AS ShopDescription,
    s.Address AS ShopAddress,
    s.CreatedAt AS ShopCreatedAt,
    s.UpdatedAt AS ShopUpdatedAt,
    u.UserID AS OwnerID,
    u.FullName AS OwnerName,
    u.Email AS OwnerEmail,
    u.PhoneNumber AS OwnerPhone
FROM 
    Shops s
JOIN 
    Users u ON s.UserID = u.UserID
WHERE 
    u.UserType = 1;