-- Active: 1714230512738@@127.0.0.1@3306@blog
-- INSERT INTO posts (title, subtitle, publish_date, featured) VALUES ('Post about traveling', 'My best post', '2023-01-01 12:00:00', 1);
INSERT INTO posts (title, subtitle, publish_date, featured) VALUES ('?', '?', '?', '?');
INSERT INTO posts (title, subtitle, publish_date, featured) VALUES ('Post number 2 about traveling', 'My best number 2 post', '2023-01-01 12:00:00', 0);
INSERT INTO posts 
( 
  'title', 'subtitle', 'content', 'author', 'author_url', 
  'publish_date', 'image_url', 'featured'
)
VALUES
( '?', '?', '?', '?', '?', '?', '?', '?', '?');

INSERT INTO posts (
id, 
title, 
subtitle, 
content, 
author,
author_url, 
publish_date, 
image_url, 
featured
) 
VALUES (
NULL,
'?',
'?',
'?',
'?',
'?',
'2023-01-01 12:00:00',
'?',
'0');


INSERT INTO posts 
( 
'id', 
'title', 
'subtitle', 
'content', 
'author',
'author_url', 
'publish_date', 
'image_url', 
'featured'
)
VALUES
( NULL, 'title', 'subtitle', 'content', 'author', 'author_url', '2023-01-01 12:00:00', 'image_url', '0')

 * FROM posts WHERE 
    title = :title AND 
    subtitle = :subtitle;


    last_name = :last_name AND 
    age = :age AND 
    city = :city AND 
    country = :country AND 
    phone = :phone AND 
    created_at = :created_at AND 
    updated_at = :updated_at;

INSERT INTO posts (
id, 
title, 
subtitle, 
content, 
author, 
author_url, 
publish_date, 
image_url, 
featured
) 
VALUES ( NULL, '$title', '$subtitle', '$content', '$author', '$author_url', '2023-01-01 12:00:00', '$image_url', '0')
