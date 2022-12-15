zakup przedmiotu
UPDATE offerts SET buyer_id="1" WHERE name="PC" AND description="gamingowy";

pobieranie oferty konkretnego użytkownika

SELECT offerts.name,offerts.description from offerts where id="1";

czy użytkownik może się zalogować

SELECT id FROM users WHERE name ='$user_name' AND password='$user_password';

czy użytkownik może się zarejestrować

INSERT INTO `users`(`id`, `name`, `password`, `admin`, `orders_id`) VALUES (2,"s3","s3",0,0);

Niekupione przedmioty
SELECT name, description from offerts WHERE buyer_id="0";

Modyfikowane ofert

UPDATE offerts SET offerts.name="ball", offerts.description="ballowski" WHERE users_id="0" AND id="0";

dodawanie oferty:

INSERT INTO offerts (name,description,users_id) VALUES ("Pc","gamingowy","1");

Wyświetloanie ofert użytkownika

SELECT name,description FROM offerts WHERE buyer_id="1";
SELECT name, description FROM shopping WHERE id="1"




