from car import Car

class UberBlack(Car):
    typeCarAccepted = []
    seatsMaterial = []
    
    def __init__(self,license, drivers, typeCarAccepted, seatsMaterial):
        super().__init__(license,drivers)
        self.typeCarAccepted = typeCarAccepted
        self.seatsMaterial = seatsMaterial