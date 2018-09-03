DROP TABLE IF EXISTS listings;

CREATE TABLE listings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    descr VARCHAR(255),
    price INT,
    trustap_listing_id VARCHAR(255)
);
