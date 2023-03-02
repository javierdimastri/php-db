<?php

namespace Repository{
    use Model\Comment;

//    try to use interface from another file;
    interface CommentRepository
    {
        function insert(Comment $comment): Comment;

        function findById(int $id): ?Comment;

        function findAll(): array;
    }

    class CommentRepositoryImpl implements CommentRepository {

        public function __construct(private \PDO $connection)
        {

        }

        function insert(Comment $comment): Comment
        {
            $sql = "insert into comments(email, comment) values (?, ?)";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$comment->getEmail(), $comment->getComment()]);

            $id = $this->connection->lastInsertId();
            $comment->setId($id);

            return $comment;
        }

        function findById(int $id): ?Comment
        {
            $sql = "select * from comments where id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$id]);

            if ($row = $statement->fetch()) {
                return new Comment(
                    id: $row["id"],
                    email: $row["email"],
                    comment: $row["comment"]
                );
            } else {
                return null;
            }
        }

        function findAll(): array
        {
            $sql = "SELECT * FROM comments";
            $statement = $this->connection->query($sql);

            $array = [];

            while ($row = $statement->fetch()) {
                $array[] = new Comment(
                    id: $row["id"],
                    email: $row["email"],
                    comment: $row["comment"]
                );
            }

            return $array;
        }
    }
}