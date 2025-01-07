CREATE PROCEDURE UpdateUserInfo
    @UserID INT,
    @FullName NVARCHAR(100),
    @PhoneNumber NVARCHAR(20),
    @Email NVARCHAR(100)
AS
BEGIN
    UPDATE Users
    SET 
        FullName = @FullName,
        PhoneNumber = @PhoneNumber,
        Email = @Email,
        UpdatedAt = GETDATE()
    WHERE 
        UserID = @UserID;

    PRINT 'Chỉnh sửa thông tin tài khoản thành công!';
END;
