from car import Car
from account import Account
from UberX import UberX

if __name__ == "__main__":
    car = Car("GUI999", Account("Guillermo Carrasquilla", "1193377993"))
    print(vars(car))
    print(vars(car.driver))

    carUberX = UberX("CAR995", Account("Carolina Carrasquilla", "1140058621"),
                     "Chevrolet", "Camaro SS")
    print(vars(carUberX))
    print(vars(carUberX.driver))

