CREATE TRIGGER trg_AutoCreateCreatedAt
ON Users
AFTER INSERT
AS
BEGIN
    SET NOCOUNT ON;

    UPDATE Users
    SET CreatedAt = GETDATE()
    FROM Users u
    INNER JOIN inserted i ON u.UserID = i.UserID;
END;