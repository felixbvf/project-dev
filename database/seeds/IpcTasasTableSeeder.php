<?php

use Illuminate\Database\Seeder;

class IpcTasasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->createIpcTasas();

        Eloquent::reguard();
    }

    private function createIpcTasas()
    {
        $statuses = [

			['gest' => '1985-1-1',  'ipc' => '0.2300', 'user_id' => '1'],
			['gest' => '1985-2-1',  'ipc' => '0.6500', 'user_id' => '1'],
			['gest' => '1985-3-1',  'ipc' => '0.8100', 'user_id' => '1'],
			['gest' => '1985-4-1',  'ipc' => '0.9100', 'user_id' => '1'],
			['gest' => '1985-5-1',  'ipc' => '1.2300', 'user_id' => '1'],
			['gest' => '1985-6-1',  'ipc' => '2.2000', 'user_id' => '1'],
			['gest' => '1985-7-1',  'ipc' => '3.6500', 'user_id' => '1'],
			['gest' => '1985-8-1',  'ipc' => '6.0800', 'user_id' => '1'],
			['gest' => '1985-9-1',  'ipc' => '9.5200', 'user_id' => '1'],
			['gest' => '1985-10-1', 'ipc' =>  '9.3400', 'user_id' => '1'],
			['gest' => '1985-11-1', 'ipc' =>  '9.6400', 'user_id' => '1'],
			['gest' => '1985-12-1', 'ipc' =>  '11.2600', 'user_id' => '1'],
			['gest' => '1986-1-1',  'ipc' => '14.9700', 'user_id' => '1'],
			['gest' => '1986-2-1',  'ipc' => '16.1600', 'user_id' => '1'],
			['gest' => '1986-3-1',  'ipc' => '16.1700', 'user_id' => '1'],
			['gest' => '1986-4-1',  'ipc' => '16.7500', 'user_id' => '1'],
			['gest' => '1986-5-1',  'ipc' => '16.9100', 'user_id' => '1'],
			['gest' => '1986-6-1',  'ipc' => '17.6300', 'user_id' => '1'],
			['gest' => '1986-7-1',  'ipc' => '17.9500', 'user_id' => '1'],
			['gest' => '1986-8-1',  'ipc' => '18.0600', 'user_id' => '1'],
			['gest' => '1986-9-1',  'ipc' => '18.4700', 'user_id' => '1'],
			['gest' => '1986-10-1', 'ipc' =>  '18.5800', 'user_id' => '1'],
			['gest' => '1986-11-1', 'ipc' =>  '18.5600', 'user_id' => '1'],
			['gest' => '1986-12-1', 'ipc' =>  '18.6800', 'user_id' => '1'],
			['gest' => '1987-1-1',  'ipc' => '19.1400', 'user_id' => '1'],
			['gest' => '1987-2-1',  'ipc' => '19.3800', 'user_id' => '1'],
			['gest' => '1987-3-1',  'ipc' => '19.5100', 'user_id' => '1'],
			['gest' => '1987-4-1',  'ipc' => '19.8200', 'user_id' => '1'],
			['gest' => '1987-5-1',  'ipc' => '19.8900', 'user_id' => '1'],
			['gest' => '1987-6-1',  'ipc' => '19.8500', 'user_id' => '1'],
			['gest' => '1987-7-1',  'ipc' => '19.8400', 'user_id' => '1'],
			['gest' => '1987-8-1',  'ipc' => '20.0300', 'user_id' => '1'],
			['gest' => '1987-9-1',  'ipc' => '20.1500', 'user_id' => '1'],
			['gest' => '1987-10-1', 'ipc' =>  '20.5700', 'user_id' => '1'],
			['gest' => '1987-11-1', 'ipc' =>  '20.5100', 'user_id' => '1'],
			['gest' => '1987-12-1', 'ipc' =>  '20.6800', 'user_id' => '1'],
			['gest' => '1988-1-1',  'ipc' => '20.5800', 'user_id' => '1'],
			['gest' => '1988-2-1',  'ipc' => '20.9800', 'user_id' => '1'],
			['gest' => '1988-3-1',  'ipc' => '21.1600', 'user_id' => '1'],
			['gest' => '1988-4-1',  'ipc' => '22.1600', 'user_id' => '1'],
			['gest' => '1988-5-1',  'ipc' => '22.4700', 'user_id' => '1'],
			['gest' => '1988-6-1',  'ipc' => '22.9400', 'user_id' => '1'],
			['gest' => '1988-7-1',  'ipc' => '23.8500', 'user_id' => '1'],
			['gest' => '1988-8-1',  'ipc' => '24.4300', 'user_id' => '1'],
			['gest' => '1988-9-1',  'ipc' => '24.3400', 'user_id' => '1'],
			['gest' => '1988-10-1', 'ipc' =>  '24.8400', 'user_id' => '1'],
			['gest' => '1988-11-1', 'ipc' =>  '24.7900', 'user_id' => '1'],
			['gest' => '1988-12-1', 'ipc' =>  '25.1200', 'user_id' => '1'],
			['gest' => '1989-1-1',  'ipc' => '25.2400', 'user_id' => '1'],
			['gest' => '1989-2-1',  'ipc' => '25.3800', 'user_id' => '1'],
			['gest' => '1989-3-1',  'ipc' => '25.6000', 'user_id' => '1'],
			['gest' => '1989-4-1',  'ipc' => '25.6300', 'user_id' => '1'],
			['gest' => '1989-5-1',  'ipc' => '25.7900', 'user_id' => '1'],
			['gest' => '1989-6-1',  'ipc' => '25.7400', 'user_id' => '1'],
			['gest' => '1989-7-1',  'ipc' => '25.8600', 'user_id' => '1'],
			['gest' => '1989-8-1',  'ipc' => '26.6700', 'user_id' => '1'],
			['gest' => '1989-9-1',  'ipc' => '27.6600', 'user_id' => '1'],
			['gest' => '1989-10-1', 'ipc' =>  '28.2400', 'user_id' => '1'],
			['gest' => '1989-11-1', 'ipc' =>  '28.7300', 'user_id' => '1'],
			['gest' => '1989-12-1', 'ipc' =>  '29.2800', 'user_id' => '1'],
			['gest' => '1990-1-1',  'ipc' => '29.5900', 'user_id' => '1'],
			['gest' => '1990-2-1',  'ipc' => '29.5600', 'user_id' => '1'],
			['gest' => '1990-3-1',  'ipc' => '29.6700', 'user_id' => '1'],
			['gest' => '1990-4-1',  'ipc' => '29.7600', 'user_id' => '1'],
			['gest' => '1990-5-1',  'ipc' => '29.9300', 'user_id' => '1'],
			['gest' => '1990-6-1',  'ipc' => '30.5300', 'user_id' => '1'],
			['gest' => '1990-7-1',  'ipc' => '31.0700', 'user_id' => '1'],
			['gest' => '1990-8-1',  'ipc' => '31.4100', 'user_id' => '1'],
			['gest' => '1990-9-1',  'ipc' => '31.7800', 'user_id' => '1'],
			['gest' => '1990-10-1', 'ipc' =>  '32.8800', 'user_id' => '1'],
			['gest' => '1990-11-1', 'ipc' =>  '33.8100', 'user_id' => '1'],
			['gest' => '1990-12-1', 'ipc' =>  '34.5600', 'user_id' => '1'],
			['gest' => '1991-1-1',  'ipc' => '36.5800', 'user_id' => '1'],
			['gest' => '1991-2-1',  'ipc' => '36.6700', 'user_id' => '1'],
			['gest' => '1991-3-1',  'ipc' => '36.9100', 'user_id' => '1'],
			['gest' => '1991-4-1',  'ipc' => '37.0900', 'user_id' => '1'],
			['gest' => '1991-5-1',  'ipc' => '37.3800', 'user_id' => '1'],
			['gest' => '1991-6-1',  'ipc' => '37.6600', 'user_id' => '1'],
			['gest' => '1991-7-1',  'ipc' => '37.9800', 'user_id' => '1'],
			['gest' => '1991-8-1',  'ipc' => '38.3700', 'user_id' => '1'],
			['gest' => '1991-9-1',  'ipc' => '38.5300', 'user_id' => '1'],
			['gest' => '1991-10-1', 'ipc' =>  '38.9000', 'user_id' => '1'],
			['gest' => '1991-11-1', 'ipc' =>  '39.2300', 'user_id' => '1'],
			['gest' => '1991-12-1', 'ipc' =>  '39.5800', 'user_id' => '1'],
			['gest' => '1992-1-1',  'ipc' => '40.5900', 'user_id' => '1'],
			['gest' => '1992-2-1',  'ipc' => '41.5000', 'user_id' => '1'],
			['gest' => '1992-3-1',  'ipc' => '41.7200', 'user_id' => '1'],
			['gest' => '1992-4-1',  'ipc' => '41.8300', 'user_id' => '1'],
			['gest' => '1992-5-1',  'ipc' => '42.1200', 'user_id' => '1'],
			['gest' => '1992-6-1',  'ipc' => '42.3900', 'user_id' => '1'],
			['gest' => '1992-7-1',  'ipc' => '42.7100', 'user_id' => '1'],
			['gest' => '1992-8-1',  'ipc' => '43.1000', 'user_id' => '1'],
			['gest' => '1992-9-1',  'ipc' => '43.1300', 'user_id' => '1'],
			['gest' => '1992-10-1', 'ipc' =>  '43.3600', 'user_id' => '1'],
			['gest' => '1992-11-1', 'ipc' =>  '43.5700', 'user_id' => '1'],
			['gest' => '1992-12-1', 'ipc' =>  '43.7200', 'user_id' => '1'],
			['gest' => '1993-1-1',  'ipc' => '44.4600', 'user_id' => '1'],
			['gest' => '1993-2-1',  'ipc' => '44.8800', 'user_id' => '1'],
			['gest' => '1993-3-1',  'ipc' => '44.8600', 'user_id' => '1'],
			['gest' => '1993-4-1',  'ipc' => '44.9100', 'user_id' => '1'],
			['gest' => '1993-5-1',  'ipc' => '45.2500', 'user_id' => '1'],
			['gest' => '1993-6-1',  'ipc' => '45.6600', 'user_id' => '1'],
			['gest' => '1993-7-1',  'ipc' => '46.1700', 'user_id' => '1'],
			['gest' => '1993-8-1',  'ipc' => '46.9800', 'user_id' => '1'],
			['gest' => '1993-9-1',  'ipc' => '47.2300', 'user_id' => '1'],
			['gest' => '1993-10-1', 'ipc' =>  '47.4700', 'user_id' => '1'],
			['gest' => '1993-11-1', 'ipc' =>  '47.5600', 'user_id' => '1'],
			['gest' => '1993-12-1', 'ipc' =>  '47.7800', 'user_id' => '1'],
			['gest' => '1994-1-1',  'ipc' => '48.1800', 'user_id' => '1'],
			['gest' => '1994-2-1',  'ipc' => '48.4400', 'user_id' => '1'],
			['gest' => '1994-3-1',  'ipc' => '48.4000', 'user_id' => '1'],
			['gest' => '1994-4-1',  'ipc' => '48.6400', 'user_id' => '1'],
			['gest' => '1994-5-1',  'ipc' => '48.9400', 'user_id' => '1'],
			['gest' => '1994-6-1',  'ipc' => '49.1700', 'user_id' => '1'],
			['gest' => '1994-7-1',  'ipc' => '49.6300', 'user_id' => '1'],
			['gest' => '1994-8-1',  'ipc' => '50.2400', 'user_id' => '1'],
			['gest' => '1994-9-1',  'ipc' => '50.5500', 'user_id' => '1'],
			['gest' => '1994-10-1', 'ipc' =>  '50.9300', 'user_id' => '1'],
			['gest' => '1994-11-1', 'ipc' =>  '51.7900', 'user_id' => '1'],
			['gest' => '1994-12-1', 'ipc' =>  '51.8600', 'user_id' => '1'],
			['gest' => '1995-1-1',  'ipc' => '52.2900', 'user_id' => '1'],
			['gest' => '1995-2-1',  'ipc' => '52.5800', 'user_id' => '1'],
			['gest' => '1995-3-1',  'ipc' => '53.0700', 'user_id' => '1'],
			['gest' => '1995-4-1',  'ipc' => '53.8900', 'user_id' => '1'],
			['gest' => '1995-5-1',  'ipc' => '54.1400', 'user_id' => '1'],
			['gest' => '1995-6-1',  'ipc' => '54.5200', 'user_id' => '1'],
			['gest' => '1995-7-1',  'ipc' => '54.7300', 'user_id' => '1'],
			['gest' => '1995-8-1',  'ipc' => '55.0100', 'user_id' => '1'],
			['gest' => '1995-9-1',  'ipc' => '55.3000', 'user_id' => '1'],
			['gest' => '1995-10-1', 'ipc' =>  '56.3400', 'user_id' => '1'],
			['gest' => '1995-11-1', 'ipc' =>  '57.3500', 'user_id' => '1'],
			['gest' => '1995-12-1', 'ipc' =>  '58.3800', 'user_id' => '1'],
			['gest' => '1996-1-1',  'ipc' => '59.2800', 'user_id' => '1'],
			['gest' => '1996-2-1',  'ipc' => '60.9200', 'user_id' => '1'],
			['gest' => '1996-3-1',  'ipc' => '60.7800', 'user_id' => '1'],
			['gest' => '1996-4-1',  'ipc' => '60.6500', 'user_id' => '1'],
			['gest' => '1996-5-1',  'ipc' => '60.8800', 'user_id' => '1'],
			['gest' => '1996-6-1',  'ipc' => '61.2000', 'user_id' => '1'],
			['gest' => '1996-7-1',  'ipc' => '61.8900', 'user_id' => '1'],
			['gest' => '1996-8-1',  'ipc' => '62.5400', 'user_id' => '1'],
			['gest' => '1996-9-1',  'ipc' => '62.6400', 'user_id' => '1'],
			['gest' => '1996-10-1', 'ipc' =>  '62.5900', 'user_id' => '1'],
			['gest' => '1996-11-1', 'ipc' =>  '62.9200', 'user_id' => '1'],
			['gest' => '1996-12-1', 'ipc' =>  '63.0200', 'user_id' => '1'],
			['gest' => '1997-1-1',  'ipc' => '63.0200', 'user_id' => '1'],
			['gest' => '1997-2-1',  'ipc' => '63.1300', 'user_id' => '1'],
			['gest' => '1997-3-1',  'ipc' => '62.9800', 'user_id' => '1'],
			['gest' => '1997-4-1',  'ipc' => '63.3300', 'user_id' => '1'],
			['gest' => '1997-5-1',  'ipc' => '63.7900', 'user_id' => '1'],
			['gest' => '1997-6-1',  'ipc' => '64.3800', 'user_id' => '1'],
			['gest' => '1997-7-1',  'ipc' => '65.2000', 'user_id' => '1'],
			['gest' => '1997-8-1',  'ipc' => '65.6300', 'user_id' => '1'],
			['gest' => '1997-9-1',  'ipc' => '64.9400', 'user_id' => '1'],
			['gest' => '1997-10-1', 'ipc' =>  '65.1900', 'user_id' => '1'],
			['gest' => '1997-11-1', 'ipc' =>  '65.2700', 'user_id' => '1'],
			['gest' => '1997-12-1', 'ipc' =>  '67.2600', 'user_id' => '1'],
			['gest' => '1998-1-1',  'ipc' => '68.2000', 'user_id' => '1'],
			['gest' => '1998-2-1',  'ipc' => '68.7700', 'user_id' => '1'],
			['gest' => '1998-3-1',  'ipc' => '68.9100', 'user_id' => '1'],
			['gest' => '1998-4-1',  'ipc' => '69.1000', 'user_id' => '1'],
			['gest' => '1998-5-1',  'ipc' => '69.3200', 'user_id' => '1'],
			['gest' => '1998-6-1',  'ipc' => '69.4800', 'user_id' => '1'],
			['gest' => '1998-7-1',  'ipc' => '69.6400', 'user_id' => '1'],
			['gest' => '1998-8-1',  'ipc' => '69.6600', 'user_id' => '1'],
			['gest' => '1998-9-1',  'ipc' => '69.6200', 'user_id' => '1'],
			['gest' => '1998-10-1', 'ipc' =>  '70.3100', 'user_id' => '1'],
			['gest' => '1998-11-1', 'ipc' =>  '70.3300', 'user_id' => '1'],
			['gest' => '1998-12-1', 'ipc' =>  '70.2200', 'user_id' => '1'],
			['gest' => '1999-1-1',  'ipc' => '70.3200', 'user_id' => '1'],
			['gest' => '1999-2-1',  'ipc' => '70.5900', 'user_id' => '1'],
			['gest' => '1999-3-1',  'ipc' => '70.2900', 'user_id' => '1'],
			['gest' => '1999-4-1',  'ipc' => '70.1800', 'user_id' => '1'],
			['gest' => '1999-5-1',  'ipc' => '70.2400', 'user_id' => '1'],
			['gest' => '1999-6-1',  'ipc' => '70.5000', 'user_id' => '1'],
			['gest' => '1999-7-1',  'ipc' => '70.6400', 'user_id' => '1'],
			['gest' => '1999-8-1',  'ipc' => '71.0100', 'user_id' => '1'],
			['gest' => '1999-9-1',  'ipc' => '71.4300', 'user_id' => '1'],
			['gest' => '1999-10-1', 'ipc' =>  '71.9400', 'user_id' => '1'],
			['gest' => '1999-11-1', 'ipc' =>  '71.9900', 'user_id' => '1'],
			['gest' => '1999-12-1', 'ipc' =>  '72.4200', 'user_id' => '1'],
			['gest' => '2000-1-1',  'ipc' => '72.8000', 'user_id' => '1'],
			['gest' => '2000-2-1',  'ipc' => '73.1000', 'user_id' => '1'],
			['gest' => '2000-3-1',  'ipc' => '73.5500', 'user_id' => '1'],
			['gest' => '2000-4-1',  'ipc' => '74.2600', 'user_id' => '1'],
			['gest' => '2000-5-1',  'ipc' => '73.3300', 'user_id' => '1'],
			['gest' => '2000-6-1',  'ipc' => '73.4700', 'user_id' => '1'],
			['gest' => '2000-7-1',  'ipc' => '74.0000', 'user_id' => '1'],
			['gest' => '2000-8-1',  'ipc' => '74.2900', 'user_id' => '1'],
			['gest' => '2000-9-1',  'ipc' => '75.6600', 'user_id' => '1'],
			['gest' => '2000-10-1', 'ipc' =>  '76.6700', 'user_id' => '1'],
			['gest' => '2000-11-1', 'ipc' =>  '74.7200', 'user_id' => '1'],
			['gest' => '2000-12-1', 'ipc' =>  '74.8900', 'user_id' => '1'],
			['gest' => '2001-1-1',  'ipc' => '75.0600', 'user_id' => '1'],
			['gest' => '2001-2-1',  'ipc' => '75.0400', 'user_id' => '1'],
			['gest' => '2001-3-1',  'ipc' => '74.8700', 'user_id' => '1'],
			['gest' => '2001-4-1',  'ipc' => '75.0200', 'user_id' => '1'],
			['gest' => '2001-5-1',  'ipc' => '74.8900', 'user_id' => '1'],
			['gest' => '2001-6-1',  'ipc' => '75.4400', 'user_id' => '1'],
			['gest' => '2001-7-1',  'ipc' => '76.3400', 'user_id' => '1'],
			['gest' => '2001-8-1',  'ipc' => '75.8400', 'user_id' => '1'],
			['gest' => '2001-9-1',  'ipc' => '75.6400', 'user_id' => '1'],
			['gest' => '2001-10-1', 'ipc' =>  '75.7000', 'user_id' => '1'],
			['gest' => '2001-11-1', 'ipc' =>  '75.5300', 'user_id' => '1'],
			['gest' => '2001-12-1', 'ipc' =>  '75.5800', 'user_id' => '1'],
			['gest' => '2002-1-1',  'ipc' => '75.5700', 'user_id' => '1'],
			['gest' => '2002-2-1',  'ipc' => '75.7300', 'user_id' => '1'],
			['gest' => '2002-3-1',  'ipc' => '75.5000', 'user_id' => '1'],
			['gest' => '2002-4-1',  'ipc' => '75.4800', 'user_id' => '1'],
			['gest' => '2002-5-1',  'ipc' => '75.5100', 'user_id' => '1'],
			['gest' => '2002-6-1',  'ipc' => '75.5900', 'user_id' => '1'],
			['gest' => '2002-7-1',  'ipc' => '75.9000', 'user_id' => '1'],
			['gest' => '2002-8-1',  'ipc' => '76.0700', 'user_id' => '1'],
			['gest' => '2002-9-1',  'ipc' => '76.4200', 'user_id' => '1'],
			['gest' => '2002-10-1', 'ipc' =>  '76.8300', 'user_id' => '1'],
			['gest' => '2002-11-1', 'ipc' =>  '77.2500', 'user_id' => '1'],
			['gest' => '2002-12-1', 'ipc' =>  '77.4300', 'user_id' => '1'],
			['gest' => '2003-1-1',  'ipc' => '77.7400', 'user_id' => '1'],
			['gest' => '2003-2-1',  'ipc' => '77.5700', 'user_id' => '1'],
			['gest' => '2003-3-1',  'ipc' => '77.6200', 'user_id' => '1'],
			['gest' => '2003-4-1',  'ipc' => '77.8600', 'user_id' => '1'],
			['gest' => '2003-5-1',  'ipc' => '77.8700', 'user_id' => '1'],
			['gest' => '2003-6-1',  'ipc' => '78.0300', 'user_id' => '1'],
			['gest' => '2003-7-1',  'ipc' => '78.5000', 'user_id' => '1'],
			['gest' => '2003-8-1',  'ipc' => '79.0000', 'user_id' => '1'],
			['gest' => '2003-9-1',  'ipc' => '79.1900', 'user_id' => '1'],
			['gest' => '2003-10-1', 'ipc' =>  '80.1800', 'user_id' => '1'],
			['gest' => '2003-11-1', 'ipc' =>  '79.7600', 'user_id' => '1'],
			['gest' => '2003-12-1', 'ipc' =>  '80.4800', 'user_id' => '1'],
			['gest' => '2004-1-1',  'ipc' => '80.9700', 'user_id' => '1'],
			['gest' => '2004-2-1',  'ipc' => '81.1300', 'user_id' => '1'],
			['gest' => '2004-3-1',  'ipc' => '80.9100', 'user_id' => '1'],
			['gest' => '2004-4-1',  'ipc' => '80.9300', 'user_id' => '1'],
			['gest' => '2004-5-1',  'ipc' => '81.2600', 'user_id' => '1'],
			['gest' => '2004-6-1',  'ipc' => '81.8700', 'user_id' => '1'],
			['gest' => '2004-7-1',  'ipc' => '82.3000', 'user_id' => '1'],
			['gest' => '2004-8-1',  'ipc' => '82.5900', 'user_id' => '1'],
			['gest' => '2004-9-1',  'ipc' => '82.5700', 'user_id' => '1'],
			['gest' => '2004-10-1', 'ipc' =>  '83.2400', 'user_id' => '1'],
			['gest' => '2004-11-1', 'ipc' =>  '83.6900', 'user_id' => '1'],
			['gest' => '2004-12-1', 'ipc' =>  '84.2000', 'user_id' => '1'],
			['gest' => '2005-1-1',  'ipc' => '85.3500', 'user_id' => '1'],
			['gest' => '2005-2-1',  'ipc' => '85.4000', 'user_id' => '1'],
			['gest' => '2005-3-1',  'ipc' => '85.5300', 'user_id' => '1'],
			['gest' => '2005-4-1',  'ipc' => '85.2100', 'user_id' => '1'],
			['gest' => '2005-5-1',  'ipc' => '85.7900', 'user_id' => '1'],
			['gest' => '2005-6-1',  'ipc' => '87.1100', 'user_id' => '1'],
			['gest' => '2005-7-1',  'ipc' => '86.7000', 'user_id' => '1'],
			['gest' => '2005-8-1',  'ipc' => '87.0100', 'user_id' => '1'],
			['gest' => '2005-9-1',  'ipc' => '87.1400', 'user_id' => '1'],
			['gest' => '2005-10-1', 'ipc' =>  '87.4600', 'user_id' => '1'],
			['gest' => '2005-11-1', 'ipc' =>  '87.8400', 'user_id' => '1'],
			['gest' => '2005-12-1', 'ipc' =>  '88.3300', 'user_id' => '1'],
			['gest' => '2006-1-1',  'ipc' => '88.6900', 'user_id' => '1'],
			['gest' => '2006-2-1',  'ipc' => '88.9600', 'user_id' => '1'],
			['gest' => '2006-3-1',  'ipc' => '88.7200', 'user_id' => '1'],
			['gest' => '2006-4-1',  'ipc' => '88.8400', 'user_id' => '1'],
			['gest' => '2006-5-1',  'ipc' => '89.5900', 'user_id' => '1'],
			['gest' => '2006-6-1',  'ipc' => '90.1400', 'user_id' => '1'],
			['gest' => '2006-7-1',  'ipc' => '90.6500', 'user_id' => '1'],
			['gest' => '2006-8-1',  'ipc' => '90.8200', 'user_id' => '1'],
			['gest' => '2006-9-1',  'ipc' => '90.9000', 'user_id' => '1'],
			['gest' => '2006-10-1', 'ipc' =>  '91.3200', 'user_id' => '1'],
			['gest' => '2006-11-1', 'ipc' =>  '92.0100', 'user_id' => '1'],
			['gest' => '2006-12-1', 'ipc' =>  '92.7000', 'user_id' => '1'],
			['gest' => '2007-1-1',  'ipc' => '94.0300', 'user_id' => '1'],
			['gest' => '2007-2-1',  'ipc' => '94.8100', 'user_id' => '1'],
			['gest' => '2007-3-1',  'ipc' => '95.1000', 'user_id' => '1'],
			['gest' => '2007-4-1',  'ipc' => '94.8500', 'user_id' => '1'],
			['gest' => '2007-5-1',  'ipc' => '95.2800', 'user_id' => '1'],
			['gest' => '2007-6-1',  'ipc' => '96.0900', 'user_id' => '1'],
			['gest' => '2007-7-1',  'ipc' => '98.6600', 'user_id' => '1'],
			['gest' => '2007-8-1',  'ipc' => '100.2300', 'user_id' => '1'],
			['gest' => '2007-9-1',  'ipc' => '100.4200', 'user_id' => '1'],
			['gest' => '2007-10-1', 'ipc' =>  '101.6700', 'user_id' => '1'],
			['gest' => '2007-11-1', 'ipc' =>  '102.9200', 'user_id' => '1'],
			['gest' => '2007-12-1', 'ipc' =>  '103.5700', 'user_id' => '1'],
			['gest' => '2008-1-1',  'ipc' => '104.7000', 'user_id' => '1'],
			['gest' => '2008-2-1',  'ipc' => '107.4400', 'user_id' => '1'],
			['gest' => '2008-3-1',  'ipc' => '108.4900', 'user_id' => '1'],
			['gest' => '2008-4-1',  'ipc' => '109.2900', 'user_id' => '1'],
			['gest' => '2008-5-1',  'ipc' => '111.3300', 'user_id' => '1'],
			['gest' => '2008-6-1',  'ipc' => '112.7300', 'user_id' => '1'],
			['gest' => '2008-7-1',  'ipc' => '113.2500', 'user_id' => '1'],
			['gest' => '2008-8-1',  'ipc' => '113.9900', 'user_id' => '1'],
			['gest' => '2008-9-1',  'ipc' => '114.9900', 'user_id' => '1'],
			['gest' => '2008-10-1', 'ipc' =>  '115.2000', 'user_id' => '1'],
			['gest' => '2008-11-1', 'ipc' =>  '115.3500', 'user_id' => '1'],
			['gest' => '2008-12-1', 'ipc' =>  '115.8400', 'user_id' => '1'],
			['gest' => '2009-1-1',  'ipc' => '116.2600', 'user_id' => '1'],
			['gest' => '2009-2-1',  'ipc' => '116.1800', 'user_id' => '1'],
			['gest' => '2009-3-1',  'ipc' => '115.6100', 'user_id' => '1'],
			['gest' => '2009-4-1',  'ipc' => '115.1100', 'user_id' => '1'],
			['gest' => '2009-5-1',  'ipc' => '114.8900', 'user_id' => '1'],
			['gest' => '2009-6-1',  'ipc' => '115.1200', 'user_id' => '1'],
			['gest' => '2009-7-1',  'ipc' => '114.8900', 'user_id' => '1'],
			['gest' => '2009-8-1',  'ipc' => '115.6100', 'user_id' => '1'],
			['gest' => '2009-9-1',  'ipc' => '115.7300', 'user_id' => '1'],
			['gest' => '2009-10-1', 'ipc' =>  '116.1000', 'user_id' => '1'],
			['gest' => '2009-11-1', 'ipc' =>  '115.8800', 'user_id' => '1'],
			['gest' => '2009-12-1', 'ipc' =>  '116.1500', 'user_id' => '1'],
			['gest' => '2010-1-1',  'ipc' => '116.3500', 'user_id' => '1'],
			['gest' => '2010-2-1',  'ipc' => '116.5400', 'user_id' => '1'],
			['gest' => '2010-3-1',  'ipc' => '116.4000', 'user_id' => '1'],
			['gest' => '2010-4-1',  'ipc' => '116.5100', 'user_id' => '1'],
			['gest' => '2010-5-1',  'ipc' => '116.4900', 'user_id' => '1'],
			['gest' => '2010-6-1',  'ipc' => '116.6500', 'user_id' => '1'],
			['gest' => '2010-7-1',  'ipc' => '117.3700', 'user_id' => '1'],
			['gest' => '2010-8-1',  'ipc' => '118.6100', 'user_id' => '1'],
			['gest' => '2010-9-1',  'ipc' => '119.5200', 'user_id' => '1'],
			['gest' => '2010-10-1', 'ipc' =>  '120.9800', 'user_id' => '1'],
			['gest' => '2010-11-1', 'ipc' =>  '122.3300', 'user_id' => '1'],
			['gest' => '2010-12-1', 'ipc' =>  '124.4900', 'user_id' => '1'],
			['gest' => '2011-1-1',  'ipc' => '126.1000', 'user_id' => '1'],
			['gest' => '2011-2-1',  'ipc' => '128.1900', 'user_id' => '1'],
			['gest' => '2011-3-1',  'ipc' => '129.3300', 'user_id' => '1'],
			['gest' => '2011-4-1',  'ipc' => '129.3600', 'user_id' => '1'],
			['gest' => '2011-5-1',  'ipc' => '129.6200', 'user_id' => '1'],
			['gest' => '2011-6-1',  'ipc' => '129.8000', 'user_id' => '1'],
			['gest' => '2011-7-1',  'ipc' => '130.4900', 'user_id' => '1'],
			['gest' => '2011-8-1',  'ipc' => '130.9900', 'user_id' => '1'],
			['gest' => '2011-9-1',  'ipc' => '131.3900', 'user_id' => '1'],
			['gest' => '2011-10-1', 'ipc' =>  '132.0100', 'user_id' => '1'],
			['gest' => '2011-11-1', 'ipc' =>  '132.4400', 'user_id' => '1'],
			['gest' => '2011-12-1', 'ipc' =>  '133.0800', 'user_id' => '1'],
			['gest' => '2012-1-1',  'ipc' => '133.4900', 'user_id' => '1'],
			['gest' => '2012-2-1',  'ipc' => '134.1500', 'user_id' => '1'],
			['gest' => '2012-3-1',  'ipc' => '134.5400', 'user_id' => '1'],
			['gest' => '2012-4-1',  'ipc' => '134.7500', 'user_id' => '1'],
			['gest' => '2012-5-1',  'ipc' => '135.4100', 'user_id' => '1'],
			['gest' => '2012-6-1',  'ipc' => '135.7000', 'user_id' => '1'],
			['gest' => '2012-7-1',  'ipc' => '136.2200', 'user_id' => '1'],
			['gest' => '2012-8-1',  'ipc' => '136.7000', 'user_id' => '1'],
			['gest' => '2012-9-1',  'ipc' => '137.2100', 'user_id' => '1'],
			['gest' => '2012-10-1', 'ipc' =>  '137.7300', 'user_id' => '1'],
			['gest' => '2012-11-1', 'ipc' =>  '138.3900', 'user_id' => '1'],
			['gest' => '2012-12-1', 'ipc' =>  '139.1300', 'user_id' => '1'],
			['gest' => '2013-1-1',  'ipc' => '140.0500', 'user_id' => '1'],
			['gest' => '2013-2-1',  'ipc' => '140.9600', 'user_id' => '1'],
			['gest' => '2013-3-1',  'ipc' => '141.3100', 'user_id' => '1'],
			['gest' => '2013-4-1',  'ipc' => '141.4100', 'user_id' => '1'],
			['gest' => '2013-5-1',  'ipc' => '141.8000', 'user_id' => '1'],
			['gest' => '2013-6-1',  'ipc' => '142.2300', 'user_id' => '1'],
			['gest' => '2013-7-1',  'ipc' => '143.1000', 'user_id' => '1'],
			['gest' => '2013-8-1',  'ipc' => '145.0200', 'user_id' => '1'],
			['gest' => '2013-9-1',  'ipc' => '146.9900', 'user_id' => '1'],
			['gest' => '2013-10-1', 'ipc' =>  '148.0700', 'user_id' => '1'],
			['gest' => '2013-11-1', 'ipc' =>  '148.0200', 'user_id' => '1'],
			['gest' => '2013-12-1', 'ipc' =>  '148.1400', 'user_id' => '1'],
			['gest' => '2014-1-1',  'ipc' => '148.5300', 'user_id' => '1'],
			['gest' => '2014-2-1',  'ipc' => '149.6500', 'user_id' => '1'],
			['gest' => '2014-3-1',  'ipc' => '149.9700', 'user_id' => '1'],
			['gest' => '2014-4-1',  'ipc' => '150.2100', 'user_id' => '1'],
			['gest' => '2014-5-1',  'ipc' => '150.8400', 'user_id' => '1'],
			['gest' => '2014-6-1',  'ipc' => '152.6600', 'user_id' => '1'],
			['gest' => '2014-7-1',  'ipc' => '153.8400', 'user_id' => '1'],
			['gest' => '2014-8-1',  'ipc' => '153.8800', 'user_id' => '1'],
			['gest' => '2014-9-1',  'ipc' => '153.3100', 'user_id' => '1'],
			['gest' => '2014-10-1', 'ipc' =>  '153.4500', 'user_id' => '1'],
			['gest' => '2014-11-1', 'ipc' =>  '154.5400', 'user_id' => '1'],
			['gest' => '2014-12-1', 'ipc' =>  '155.8400', 'user_id' => '1'],
			['gest' => '2015-1-1',  'ipc' => '157.3400', 'user_id' => '1'],
			['gest' => '2015-2-1',  'ipc' => '157.8700', 'user_id' => '1'],
			['gest' => '2015-3-1',  'ipc' => '157.1000', 'user_id' => '1'],
			['gest' => '2015-4-1',  'ipc' => '156.4300', 'user_id' => '1'],
			['gest' => '2015-5-1',  'ipc' => '157.0000', 'user_id' => '1'],
			['gest' => '2015-6-1',  'ipc' => '157.5400', 'user_id' => '1'],
			['gest' => '2015-7-1',  'ipc' => '158.4900', 'user_id' => '1'],
			['gest' => '2015-8-1',  'ipc' => '158.8100', 'user_id' => '1'],
			['gest' => '2015-9-1',  'ipc' => '159.5600', 'user_id' => '1'],
			['gest' => '2015-10-1', 'ipc' =>  '160.0900', 'user_id' => '1'],
			['gest' => '2015-11-1', 'ipc' =>  '160.1700', 'user_id' => '1'],
			['gest' => '2015-12-1', 'ipc' =>  '160.4400', 'user_id' => '1'],
			['gest' => '2016-1-1',  'ipc' => '161.1000', 'user_id' => '1'],
			['gest' => '2016-2-1',  'ipc' => '161.1000', 'user_id' => '1']

        ];

        foreach ($statuses as $status) {

                Muserpol\IpcTasa::create($status);
            
        }
    }
}
