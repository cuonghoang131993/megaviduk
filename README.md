# How to use the class:
## Instantiate the class.
    $db = new Database();
## Perform a query.
    $db->query('SELECT * FROM users WHERE id = :id');
    $db->bind(':id', 1);
    $user = $db->single();
    print_r($user);
## Insert data.
    $db->query('INSERT INTO users (name, email) VALUES (:name, :email)');
    $db->bind(':name', 'John Doe');
    $db->bind(':email', 'john@example.com');
    $db->execute();
    echo "User inserted successfully!";
