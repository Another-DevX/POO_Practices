from car import Car
from account import Account

if __name__ == "__main__":
    car = Car("QUI233",Account("Lucho diaz", "ANA192"), 3)
    print(vars(car))
    print(vars(car.driver))