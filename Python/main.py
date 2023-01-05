from uber_Models.uberX import UberX
from account_models.driver import Driver

if __name__ == "__main__":
    uberX = UberX("QUI233",Driver("Lucho diaz", "ANA192",12121,"akjsjksak@sjdks.com","olamundo1212"),"Mercedes","2018")
    print(vars(uberX))
    print(vars(uberX.driver))