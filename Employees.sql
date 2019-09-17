CREATE TABLE Users
(
    UserID int(1),
    Names varchar(55)
);
ALTER TABLE `Users` add PRIMARY KEY(`UserID`);
ALTER TABLE `Users` MODIFY`UserID` mediumint(6) UNSIGNED NOT null AUTO_INCREMENT;