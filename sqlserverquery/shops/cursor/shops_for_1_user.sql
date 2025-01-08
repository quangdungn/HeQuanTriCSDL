DECLARE @UserID INT;
DECLARE @FullName NVARCHAR(100);
DECLARE @ShopCount INT;

DECLARE UserCursor CURSOR FOR
SELECT UserID, FullName
FROM Users;

OPEN UserCursor;

FETCH NEXT FROM UserCursor INTO @UserID, @FullName;

WHILE @@FETCH_STATUS = 0
BEGIN
    SELECT @ShopCount = COUNT(*)
    FROM Shops
    WHERE UserID = @UserID;

    PRINT 'User: ' + @FullName + ' owns ' + CAST(@ShopCount AS NVARCHAR) + ' shops.';

    FETCH NEXT FROM UserCursor INTO @UserID, @FullName;
END;

CLOSE UserCursor;
DEALLOCATE UserCursor;
