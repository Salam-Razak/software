from django.db import models

# Create your models here.
class Dht11(models.Model):
    id = models.BigAutoField(db_column='ID', primary_key=True)  # Field name made lowercase.
    temperature = models.FloatField(db_column='Temperature', blank=True, null=True)  # Field name made lowercase.
    humidity = models.FloatField(db_column='Humidity', blank=True, null=True)  # Field name made lowercase.
    time = models.DateTimeField(db_column='Time')  # Field name made lowercase.

    class Meta:
        managed = False
        db_table = 'dht11'