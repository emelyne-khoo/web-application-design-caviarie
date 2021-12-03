use f32ee;

insert into customers values
  (1, "Julie Smith"),
  (2, "Alan Wong"),
  (3, "Michelle Arthur");

insert into orders values
  (NULL, 3, 450.00, "2021-10-02"),
  (NULL, 1, 750.00, "2021-10-15"),
  (NULL, 2, 450.00, "2021-10-19"),
  (NULL, 3, 450.00, "2021-10-01");

insert into bags values
  ("0-672-31697-8", "Alie", 750.00),
  ("0-672-31745-1", "Carrie", 450.00),
  ("0-672-31509-2", "Carter", 450.00),
  ("0-672-31769-9", "Ezra", 650.00);

insert into order_items values
  (1, "0-672-31697-8", 1),
  (2, "0-672-31769-9", 1),
  (3, "0-672-31769-9", 1),

