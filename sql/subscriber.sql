create table subscriber (
    id serial primary key,
    email varchar(255) not null,
    created_at timestamp not null default now()
);