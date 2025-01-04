/*********************************************************************
  Tên cơ sở dữ liệu	: MichelinDogs
  Mục đích			: Đây là cơ sở dữ liệu của một sàn 
					  thương mại điện tử
  Các bảng chính	: Users, Shops, Categories, Products, ProductImages, 
					  Carts, CartItems, Orders, OrderDetails 
*********************************************************************/

-- ==================================================================
-- 1. Tạo database và sử dụng 
-- ==================================================================
CREATE DATABASE ShopeeDB;
GO

USE ShopeeDB;
GO

-- ==============================================================================================================
-- 2. Tạo bảng Users (Người dùng)
-- ==============================================================================================================
-- STT	: Tên cột		: Ý nghĩa			: Kiểu dữ liệu	: Null		: Lưu ý				: Khóa 
-- ==============================================================================================================
-- 1.	: UserID		: Mã người dùng		: INT			: NOT NULL	: IDENTITY(1,1)		: PRIMARY KEY
-- 2.   : FullName		: Tên người dùng	: NVARCHAR(100)	: NOT NULL	:					:
-- 3.	: Email			: Emai người dùng	: NVARCHAR(100)	: NOT NULL	: UNIQUE			:
-- 4.	: PhoneNumber	: Số điện thoại		: NVARCHAR(20)	: NULL		:					:
-- 5.   : [Password]	: Mật khẩu			: VARCHAR(200)	: NOT NULL	:					:
-- 6.	: UserType		: Kiểu người dùng	: TINYINT		: NOT NULL	: DEFAULT 0			:
-- 7.	: CreatedAt		: Ngày tạo			: DATETIME		: NOT NULL	: DEFAULT GETDATE() :
-- 8.	: UpdatedAt		: Ngày cập nhật		: DATETIME		: NULL		:					:
-- ==============================================================================================================
CREATE TABLE Users
(
    UserID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
    FullName NVARCHAR(100) NOT NULL,
    Email NVARCHAR(100) NOT NULL UNIQUE,
    PhoneNumber NVARCHAR(20) NULL,
    [Password] VARCHAR(200) NOT NULL,
    UserType TINYINT NOT NULL DEFAULT 0,
    CreatedAt DATETIME NOT NULL DEFAULT GETDATE(),
    UpdatedAt DATETIME NULL
);
GO


-- ==============================================================================================================
-- 3. Tạo bảng Shops (Cửa hàng)
-- ==============================================================================================================
-- STT	: Tên cột		: Ý nghĩa			: Kiểu dữ liệu	: Null		: Lưu ý				: Khóa 
-- ==============================================================================================================
-- 1.	: ShopID		: Mã cửa hàng		: INT			: NOT NULL	: IDENTITY(1,1)		: PRIMARY KEY
-- 2.   : UserID		: Mã chủ cửa hàng	: INT			: NOT NULL	:					: FOREIGN KEY
-- 3.	: ShopName		: Tên cửa hàng		: NVARCHAR(200)	: NOT NULL	:					:
-- 4.	: Description	: Mô tả cửa hàng	: NVARCHAR(MAX) : NULL		:					:			
-- 5.	: Address		: Địa chỉ cửa hàng	: NVARCHAR(200) : NULL		:					:
-- 6.	: CreatedAt		: Thời gian tạo		: DATETIME		: NOT NULL	: DEFAULT GETDATE()	:
-- 7.	: UpdatedAt		: Thời gian cập nhật: DATETIME		: NULL		:					: 
-- ==============================================================================================================
CREATE TABLE Shops
(
    ShopID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
    UserID INT NOT NULL,
    ShopName NVARCHAR(200) NOT NULL,
    Description NVARCHAR(MAX) NULL,
    Address NVARCHAR(200) NULL,
    CreatedAt DATETIME NOT NULL DEFAULT GETDATE(),
    UpdatedAt DATETIME NULL,
    CONSTRAINT FK_Shops_Users FOREIGN KEY(UserID)
        REFERENCES Users(UserID)
        ON DELETE CASCADE  -- Xóa user => xóa shop
        ON UPDATE NO ACTION
);
GO

-- ==============================================================================================================
-- 4. Tạo bảng Categories (Danh mục) 
-- ==============================================================================================================
-- STT	: Tên cột		: Ý nghĩa			: Kiểu dữ liệu	: Null		: Lưu ý				: Khóa 
-- ==============================================================================================================
-- 1.	: CategoryID	: Mã danh mục		: INT			: NOT NULL	: IDENTITY(1,1)		: PRIMARY KEY
-- 2.	: CategoryName	: Tên danh mục		: NVARCHAR(200) : NOT NULL	:					:
-- 3.	: CreatedAt		: Ngày tạo			: DATETIME		: NOT NULL	: DEFAULT GETDATE()	:
-- 4.	: UpdatedAt		: Ngày cập nhật		: DATETIME		: NULL		:					:
-- ==============================================================================================================
CREATE TABLE Categories
(
    CategoryID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
    CategoryName NVARCHAR(200) NOT NULL,
    CreatedAt DATETIME NOT NULL DEFAULT GETDATE(),
    UpdatedAt DATETIME NULL
);
GO

-- ==============================================================================================================
-- 5. Tạo bảng Products (Sản phẩm) 
-- ==============================================================================================================
-- STT	: Tên cột		: Ý nghĩa			: Kiểu dữ liệu	: Null		: Lưu ý				: Khóa 
-- ==============================================================================================================
-- 1.	: ProductID		: Mã sản phẩm		: INT			: NOT NULL	: IDENTITY(1,1)		: PRIMARY KEY
-- 2.	: ShopID		: Mã cửa hàng		: INT			: NOT NULL	:					: FOREIGN KEY
-- 3.	: CategoryID	: Mã danh mục		: INT			: NOT NULL	:					: FOREIGN KEY 	
-- 4.	: ProductName	: Tên sản phẩm		: NVARCHAR(200) : NOT NULL	:					:
-- 5.	: Price			: Giá				: DECIMAL(18,2)	: NOT NULL	:					:	
-- 6.	: Stock			: Số lượng tồn kho	: INT			: NOT NULL	: DEFAULT 0			:
-- 7.	: Description	: Mô tả sản phẩm	: NVARCHAR(MAX)	: NULL		:					:
-- 8.   : CreatedAt		: Ngày tạo			: DATETIME		: NOT NULL	: DEFAULT GETDATE()	:
-- 9.	: UpdatedAt		: Ngày cập nhật		: DATETIME		: NULL		:					:
-- ==============================================================================================================
CREATE TABLE Products
(
    ProductID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
    ShopID INT NOT NULL,
    CategoryID INT NOT NULL,
    ProductName NVARCHAR(200) NOT NULL,
    Price DECIMAL(18,2) NOT NULL,
    Stock INT NOT NULL DEFAULT 0,
    Description NVARCHAR(MAX) NULL,
    CreatedAt DATETIME NOT NULL DEFAULT GETDATE(),
    UpdatedAt DATETIME NULL,

    CONSTRAINT FK_Products_Shops FOREIGN KEY(ShopID)
        REFERENCES Shops(ShopID)
        ON DELETE CASCADE    -- xóa Shop => xóa Products
        ON UPDATE NO ACTION,

    CONSTRAINT FK_Products_Categories FOREIGN KEY(CategoryID)
        REFERENCES Categories(CategoryID)
        ON DELETE NO ACTION  -- tắt cascade 
        ON UPDATE NO ACTION
);
GO

-- ==============================================================================================================
-- 6. Tạo bảng ProductImages (Ảnh sản phẩm)
-- ==============================================================================================================
-- STT	: Tên cột		: Ý nghĩa				: Kiểu dữ liệu	: Null		: Lưu ý				: Khóa
-- ==============================================================================================================
-- 1.	: ImageID		: Mã ảnh				: INT			: NOT NULL	: IDENTITY(1,1)		: PRIMARY KEY
-- 2.	: ProductID		: Mã sản phẩm			: INT			: NOT NULL	:					: FOREIGN KEY		
-- 3.	: ImageURL		: Đường dẫn ảnh			: NVARCHAR(500)	: NOT NULL	:					:
-- 4.	: CreatedAt		: Ngày tạo				: DATETIME		: NOT NULL	: DEFAULT GETDATE()	:
-- ==============================================================================================================
CREATE TABLE ProductImages
(
    ImageID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
    ProductID INT NOT NULL,
    ImageURL NVARCHAR(500) NOT NULL,
    CreatedAt DATETIME NOT NULL DEFAULT GETDATE(),

    CONSTRAINT FK_ProductImages_Products FOREIGN KEY(ProductID)
        REFERENCES Products(ProductID)
        ON DELETE CASCADE   -- xóa Product => xóa ảnh
        ON UPDATE NO ACTION
);
GO

-- ==============================================================================================================
-- 7. Tạo bảng Carts (Giỏ hàng)
-- ==============================================================================================================
-- STT	: Tên cột		: Ý nghĩa				: Kiểu dữ liệu	: Null		: Lưu ý				: Khóa
-- ==============================================================================================================
-- 1.	: CartID		: Mã giỏ hàng			: INT			: NOT NULL	: IDENTITY(1,1)		: PRIMARY KEY
-- 2.	: UserID		: Mã người dùng			: INT			: NOT NULL	: UNIQUE			: FOREIGN KEY
-- 3.	: CreatedAt		: Ngày tạo				: DATETIME		: NOT NULL	: DEFAULT GETDATE()	:
-- 4.	: UpdatedAt		: Ngày cập nhật			: DATETIME		: NULL		:					:
-- ==============================================================================================================
CREATE TABLE Carts
(
    CartID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
    UserID INT NOT NULL UNIQUE,
    CreatedAt DATETIME NOT NULL DEFAULT GETDATE(),
    UpdatedAt DATETIME NULL,
    CONSTRAINT FK_Carts_Users FOREIGN KEY(UserID)
        REFERENCES Users(UserID)
        ON DELETE NO ACTION 
        ON UPDATE NO ACTION
);
GO

-- ==============================================================================================================
-- 8. Tạo bảng CartItems (Chi tiết giỏ hàng)
-- ==============================================================================================================
-- STT	: Tên cột		: Ý nghĩa				: Kiểu dữ liệu	: Null		: Lưu ý				: Khóa
-- ==============================================================================================================
-- 1.	: CartItemID	: Mã chi tiết giỏ hàng	: INT			: NOT NULL	: IDENTITY(1,1)		: PRIMARY KEY
-- 2.	: CartID		: Mã giỏ hàng			: INT			: NOT NULL	:					: FOREIGN KEY		
-- 3.	: ProductID		: Mã sản phẩm			: INT			: NOT NULL	:					: FOREIGN KEY		
-- 4.	: Quantity		: Số lượng				: INT			: NOT NULL	: DEFAULT 1			:
-- 5.	: AddedAt		: Ngày thêm				: DATETIME		: NOT NULL	: DEFAULT GETDATE()	:
-- ==============================================================================================================
CREATE TABLE CartItems
(
    CartItemID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
    CartID INT NOT NULL,
    ProductID INT NOT NULL,
    Quantity INT NOT NULL DEFAULT 1,
    AddedAt DATETIME NOT NULL DEFAULT GETDATE(),

    CONSTRAINT FK_CartItems_Carts FOREIGN KEY(CartID)
        REFERENCES Carts(CartID)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,

    CONSTRAINT FK_CartItems_Products FOREIGN KEY(ProductID)
        REFERENCES Products(ProductID)
        ON DELETE NO ACTION 
        ON UPDATE NO ACTION
);
GO

-- ==============================================================================================================
-- 9. Tạo bảng Orders (Đơn hàng)
-- ==============================================================================================================
-- STT	: Tên cột			: Ý nghĩa				: Kiểu dữ liệu	: Null		: Lưu ý				: Khóa
-- ==============================================================================================================
-- 1.	: OrderID			: Mã đơn hàng			: BIGINT		: NOT NULL	: IDENTITY(1,1)		: PRIMARY KEY
-- 2.	: UserID			: Mã người dùng			: INT			: NOT NULL	:					: FOREIGN KEY
-- 3.	: OrderDate			: Ngày đặt hàng			: DATETIME		: NOT NULL	: DEFAULT GETDATE()	:
-- 4.	: TotalAmount		: Tổng tiền				: DECIMAL(18,2)	: NOT NULL	: DEFAULT 0			:
-- 5.	: PaymentMethod		: Phương thức thanh toán: NVARCHAR(50)	: NOT NULL	:					:
-- 6.	: PaymentStatus		: Trạng thái giao hàng	: NVARCHAR(50)	: NOT NULL	: DEFAULT N'Chưa thanh toán'
-- 7.	: ShippingStatus	: Trạng thái giao hàng	: NVARCHAR(50)	: NOT NULL	: DEFAULT N'Đang giao':
-- 8.	: ShippingAddress	: Địa chỉ giao hàng		: NVARCHAR(200)	: NULL		:					:
-- 9.	: CreatedAt			: Ngày tạo				: DATETIME		: NOT NULL	: DEFAULT GETDATE()	:
-- 10.	: UpdatedAt			: Ngày cập nhật			: DATETIME		: NULL		:					:
-- ==============================================================================================================
CREATE TABLE Orders
(
    OrderID BIGINT IDENTITY(1,1) NOT NULL PRIMARY KEY,
    UserID INT NOT NULL,
    OrderDate DATETIME NOT NULL DEFAULT GETDATE(),
    TotalAmount DECIMAL(18,2) NOT NULL DEFAULT 0,
    PaymentMethod NVARCHAR(50) NOT NULL,
    PaymentStatus NVARCHAR(50) NOT NULL DEFAULT N'Chưa thanh toán',
    ShippingStatus NVARCHAR(50) NOT NULL DEFAULT N'Đang giao',
    ShippingAddress NVARCHAR(200) NULL,
    CreatedAt DATETIME NOT NULL DEFAULT GETDATE(),
    UpdatedAt DATETIME NULL,

    CONSTRAINT FK_Orders_Users FOREIGN KEY(UserID)
        REFERENCES Users(UserID)
        ON DELETE CASCADE
        ON UPDATE NO ACTION
);

GO

-- =======================================================================================================================
-- 10. Tạo bảng OrderDetails (Chi tiết đơn hàng)
-- =======================================================================================================================
-- STT	: Tên cột		: Ý nghĩa				: Kiểu dữ liệu	: Null		: Lưu ý							: Khóa
-- =======================================================================================================================
-- 1.	: OrderDetailID	: Mã chi tiết đơn hàng	: BIGINT		: NOT NULL	: IDENTITY(1,1)					: PRIMARY KEY
-- 2.	: OrderID		: Mã đơn hàng			: BIGINT		: NOT NULL	: FOREIGN KEY					:
-- 3.	: ProductID		: Mã sản phẩm			: INT			: NOT NULL	: FOREIGN KEY					:
-- 4.	: UnitPrice		: Đơn giá				: DECIMAL(18,2)	: NOT NULL	:								:
-- 5.	: Quantity		: Số lượng				: INT			: NOT NULL	: DEFAULT 1						:
-- 6.	: SubTotal		: Tổng cộng				: DECIMAL(18,2)	:			: UnitPrice * Quantity PERSISTED:
-- =======================================================================================================================
CREATE TABLE OrderDetails
(
    OrderDetailID BIGINT IDENTITY(1,1) NOT NULL PRIMARY KEY,
    OrderID BIGINT NOT NULL,
    ProductID INT NOT NULL,
    UnitPrice DECIMAL(18,2) NOT NULL,
    Quantity INT NOT NULL DEFAULT 1,
    SubTotal AS (UnitPrice * Quantity) PERSISTED,

    CONSTRAINT FK_OrderDetails_Orders FOREIGN KEY(OrderID)
        REFERENCES Orders(OrderID)
        ON DELETE CASCADE  
        ON UPDATE NO ACTION,

    CONSTRAINT FK_OrderDetails_Products FOREIGN KEY(ProductID)
        REFERENCES Products(ProductID)
        ON DELETE NO ACTION  
        ON UPDATE NO ACTION
);
GO
