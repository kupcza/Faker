<?php

namespace Faker\Provider\cs_CZ;

class Address extends \Faker\Provider\Address
{
    protected static $city = array(
		'Praha', 'Brno', 'Ostrava', 'Plzeň', 'Olomouc', 'Liberec', 'Ústí nad Labem', 'České Budějovice', 'Hradec Králové', 'Pardubice', 'Havířov', 'Zlín', 'Kladno', 'Most', 'Karviná', 'Opava', 'Frýdek-Místek', 'Děčín', 'Teplice', 'Karlovy Vary', 'Jihlava', 'Chomutov', 'Přerov', 'Prostějov', 'Jablonec nad Nisou', 'Mladá Boleslav', 'Třebíč', 'Česká Lípa', 'Třinec', 'Tábor', 'Znojmo', 'Příbram', 'Orlová', 'Trutnov', 'Cheb', 'Kolín', 'Písek', 'Kroměříž', 'Vsetín', 'Šumperk', 'Valašské Meziříčí', 'Litvínov', 'Hodonín', 'Nový Jičín', 'Uherské Hradiště', 'Český Těšín', 'Krnov', 'Břeclav', 'Sokolov', 'Litoměřice', 'Havlíčkův Brod', 'Chrudim', 'Kopřivnice', 'Žďár nad Sázavou', 'Strakonice', 'Bohumín', 'Klatovy', 'Jindřichův Hradec', 'Vyškov', 'Kutná Hora', 'Jirkov', 'Náchod', 'Blansko', 'Žatec', 'Hranice', 'Mělník', 'Louny', 'Otrokovice', 'Kadaň', 'Beroun', 'Bruntál', 'Rožnov pod Radhoštěm', 'Svitavy', 'Uherský Brod', 'Kralupy nad Vltavou', 'Ostrov', 'Česká Třebová', 'Neratovice', 'Dvůr Králové nad Labem', 'Benešov', 'Pelhřimov', 'Rakovník', 'Bílina', 'Jičín', 'Varnsdorf', 'Klášterec nad Ohří', 'Brandýs nad Labem-Stará Boleslav', 'Slaný', 'Ústí nad Orlicí', 'Chodov', 'Nymburk', 'Turnov', 'Hlučín', 'Zábřeh', 'Šternberk', 'Krupka', 'Rokycany', 'Mariánské Lázně', 'Český Krumlov', 'Poděbrady', 'Roudnice nad Labem', 'Vrchlabí', 'Jaroměř', 'Vysoké Mýto', 'Aš', 'Tachov', 'Jeseník', 'Říčany', 'Nový Bor', 'Holešov', 'Uničov', 'Vlašim', 'Veselí nad Moravou', 'Kyjov', 'Velké Meziříčí', 'Prachatice', 'Rychnov nad Kněžnou', 'Sušice', 'Boskovice', 'Frenštát pod Radhoštěm', 'Moravská Třebová', 'Rumburk', 'Humpolec', 'Čelákovice', 'Domažlice', 'Nové Město na Moravě', 'Hlinsko', 'Studénka', 'Kuřim'
    );

    public function city()
    {
        return static::randomElement(static::$city);
    }
}
