public class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        Car car = new Car("GUI999", new Account("Guillermo Carrasquilla", "1193377993"));
        car.printDataCar();
        Cash efectivo = new Cash(1193377993, 50000);
        efectivo.printPayment(); 
    }
        
} 