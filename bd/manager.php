class Manager {
    private $pdo;

    public function __construct($host, $dbname, $user, $password, $dns = '') {
        if(!$dns){
            $dsn = "mysql:host=$host;dbname=$dbname";
        }

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        try {
            $this->pdo = new PDO($dsn, $user, $password, $options);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function crear($datos) {
        // Construir la consulta INSERT
        $sql = "INSERT INTO tu_tabla (campo1, campo2, ...) VALUES (:campo1, :campo2, ...)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($datos);
    }

    public function leer($id) {
        // Construir la consulta SELECT
        $sql = "SELECT * FROM tu_tabla WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function actualizar($id, $datos) {
        // Construir la consulta UPDATE
        $sql = "UPDATE tu_tabla SET campo1 = :campo1, campo2 = :campo2, ... WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute($datos);
    }

    public function eliminar($id) {
        // Construir la consulta DELETE
        $sql = "DELETE FROM tu_tabla WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
