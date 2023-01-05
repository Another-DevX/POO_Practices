from car import Car

class UberX(Car):
    brand = str
    model = str
    
    def __init__(self,license, drivers, brand, model):
        super().__init__(license,drivers)
        self.brand = brand
        self.model= model