CREATE DATABASE justbrewit;
    USE justbrewit;
CREATE TABLE Customers (
    email VARCHAR(255) PRIMARY KEY,
    firstname VARCHAR(100),
    lastname VARCHAR(100),
    password VARCHAR(50),
    phonenum INT,
    address VARCHAR(255),
    address2 VARCHAR(255),
    city VARCHAR(100),
    county VARCHAR(100),
    eircode VARCHAR(10)
);

CREATE TABLE products (
    productid INT AUTO_INCREMENT PRIMARY KEY,
    productname VARCHAR(255),
    productdescription VARCHAR(255),
    price DECIMAL(10, 2),
    image VARCHAR(255),
    category VARCHAR(50)
);

CREATE TABLE shoppingcart (
    itemno INT AUTO_INCREMENT PRIMARY KEY,
    productid INT,
    productname VARCHAR(255),
    image VARCHAR(255),
    price DECIMAL(10, 2),
    quantity INT,
    FOREIGN KEY (productid) REFERENCES Products (productid)
);

CREATE TABLE OrderDetails (
    ordernum INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    productid INT,
    productname VARCHAR(255),
    price DECIMAL(10, 2),
    quantity INT,
    FOREIGN KEY (email) REFERENCES Customers (email),
    FOREIGN KEY (productid) REFERENCES Products (productid)
);

INSERT INTO products (productname, productdescription, price, image, category) VALUES
    ("Network Chuck - Default Route", "light roast with subtle hints of nutmeg & ginger Country of Origin: Brazil", 19.99, "../images/green_coffee.jpg", "coffee"),
    ("Network Chuck - Sudo Blend", "Hints of Maple Syrup & Milk Chocolate Country of Origin: Mexico", 19.99, "../images/yellow_coffee.jpg", "coffee"),
    ("Network Chuck - 200 OK", "Hints of Rich Caramel & Cherry Country of Origin: Colombia", 19.99, "../images/red_coffee.jpg", "coffee"),
    ("Network Chuck - On Call", "Hints of Cherry & Milk Chocolate Country of Origin: Vietnam", 19.99, "../images/blue_coffee.jpg", "coffee"),
    ("Coffee Perfection - Special Blend No. 14", "Hints of Caramel & Red Apple Country of Origin: Brazil", 24.99, "../images/purple_coffee.png", "coffee"),
    ("Coffee Perfection - Special Blend No. 21", "Hints of Rich Caramel & Milk Chocolate Country of Origin: Colombia", 24.99, "../images/yellow_beans.png", "coffee"),
    ("Coffee Perfection - Special Blend No. 05", "Notes of Sweet Caramel & Milk Chocolate Country of Origin: Vietnam", 24.99, "../images/blue_beans.png", "coffee"),
    ("Coffee Perfection - Special Blend No. 09", "Notes of Malt, Chocolate & Roasted Nut Country of Origin: Latin America", 24.99, "../images/green_beans.png", "coffee"),
    ("Coffee Perfection - Mexican Mountain Water", "Decaffeinated Blend with notes of SugarCake & Citrus Country of Origin: Mexico", 24.99, "../images/light_blue_beans.png", "coffee"),
    ("Delonghi", "Quick 15 second heat up time, Easy to use, Perfect for beginner baristas", 199.99, "../images/delonghi.jpg", "machine"),
    ("Nespresso", "Makes everything from Cappuccinos & Mochas to Flat Whites. Fits two sizes of cups.", 299.99, "../images/nespresso.jpg", "machine"),
    ("Sunbeam Iced Coffee", "Perfect for a hot summers day. Comes with insulated tumbler to keep your coffee ice cold.", 99.99, "../images/iced.jpeg", "machine"),
    ("Delonghi Magnifica Plus", "Make the perfect Lattees and Cappuccinos with it's built-in milk frother.", 349.99, "../images/magnifica.jpg", "machine"),
    ("Smeg - White", "Compact All-In-One Machine, froths your milk while your coffee is brewing.", 149.99, "../images/smeg.jpg", "machine"),
    ("Delonghi - Eletta", "Quick heat up time in 10 seconds for those on the go. Cup warmer on top.", 249.99, "../images/eletta.jpg", "machine"),
    ("Sage Barista Style", "This professional machine will make you feel like you''re in a coffee shop.", 499.99, "../images/sage.jpg", "machine"),
    ("Smeg - Black", "Small but powerful, this machine is perfect if you have limited counter space.", 149.99, "../images/smeg_black.jpg", "machine"),
    ("Nespresso Vertuo", "Sleek & Simple Design - designed for use with Nespresso Vertuo Coffee Pods.", 199.99, "../images/nespresso_vertuo.jpg", "machine");