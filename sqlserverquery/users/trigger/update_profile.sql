CREATE TRIGGER TR_CheckPasswordLength
ON Users
INSTEAD OF INSERT
AS
BEGIN
    IF EXISTS (
        SELECT 1
        FROM inserted
        WHERE LEN([Password]) < 8
    )
    BEGIN
        RAISERROR ('Mật khẩu phải có ít nhất 8 ký tự.', 16, 1);
        RETURN;
    END;

    INSERT INTO Users (FullName, Email, PhoneNumber, [Password], UserType, CreatedAt, UpdatedAt)
    SELECT FullName, Email, PhoneNumber, [Password], UserType, CreatedAt, UpdatedAt
    FROM inserted;

    PRINT 'Người dùng đã được thêm thành công.';
END;
