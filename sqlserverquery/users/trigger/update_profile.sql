CREATE TRIGGER trg_UpdateUserUpdatedAt
ON Users
AFTER UPDATE
AS
BEGIN
    UPDATE Users
    SET UpdatedAt = GETDATE()
    WHERE UserID IN (SELECT UserID FROM inserted);
END;