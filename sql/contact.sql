create table contacts (
    id serial primary key,
    fullname varchar(100) not null,
    email varchar(255) not null,
    subject varchar(255) not null,
    message text not null,
    created_at timestamp default current_timestamp
);