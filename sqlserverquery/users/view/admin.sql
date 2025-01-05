CREATE VIEW AdminUserList AS
SELECT 
    u.UserID,
    u.FullName AS UserName,
    u.Email,
    u.PhoneNumber,
    CASE 
        WHEN u.UserType = 0 THEN 'Regular User'
        WHEN u.UserType = 1 THEN 'Shop Owner'
        ELSE 'Unknown'
    END AS UserType,
    u.CreatedAt AS UserCreatedAt,
    u.UpdatedAt AS UserUpdatedAt
FROM 
    Users u
WHERE 
    u.UserType != 2;