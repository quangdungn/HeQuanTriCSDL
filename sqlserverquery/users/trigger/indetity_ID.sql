CREATE TRIGGER trg_AutoIncrementUserID
ON Users
INSTEAD OF INSERT
AS
BEGIN
    DECLARE @NextUserID INT;

    -- Lấy giá trị UserID lớn nhất trong bảng
    SELECT @NextUserID = ISNULL(MAX(UserID), 0) + 1 FROM Users;

    -- Thêm bản ghi với UserID tự động tăng
    INSERT INTO Users (UserID, FullName, Email, PhoneNumber, [Password], UserType, CreatedAt, UpdatedAt)
    SELECT @NextUserID, FullName, Email, PhoneNumber, [Password], UserType, CreatedAt, UpdatedAt
    FROM inserted;
END;
