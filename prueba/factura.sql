CREATE TABLE facturas
(
  id_factura        int(11) auto_increment PRIMARY KEY NOT NULL,
  id_cliente        INT NOT NULL,
  nombre_cliente    TEXT NOT NULL,
  lista_productos   json DEFAULT NULL,
  subtotal          INT NOT NULL,
  impuestos         INT NOT NULL,
  total             INT NOT NULL,
  fecha_compra      datetime NOT NULL,
  fecha_pedido      datetime NOT NULL
);