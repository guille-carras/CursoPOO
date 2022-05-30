let car = new Car("GUI999", new Account("Guillermo Carrasquilla", "1193377993"));
car.passenger = 4;
car.printDataCar();

let carUberx = new UberX("CAR995", new Account("Carolina Carrasquilla", "1140251458"),
                            "Chevrolet", "Camaro SS");
    carUberx.passenger = 4;
carUberx.printDataCar();

let payCard = new Card("1", "4567 7485 8394 8374", "647", "06-23", 50000);
payCard.printPayment();

let onePayPal = new PayPal("2", "guillercarrasquilla@gmail.com", 560000);
onePayPal.printPayment();