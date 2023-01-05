from uber_Models.uberX import UberX
from account import Account

if __name__ == "__main__":
    uberX = UberX("QUI233",Account("Lucho diaz", "ANA192"),"Mercedes","2018")
    print(vars(uberX))
    print(vars(uberX.driver))