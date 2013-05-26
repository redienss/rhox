SET SQL_SAFE_UPDATES=0;

DELETE FROM rhox_db.Edition;
ALTER TABLE rhox_db.Edition AUTO_INCREMENT = 1;
INSERT INTO rhox_db.Edition (
    name,
    code,
    code_magiccards,
    code_mtgnet,
    code_gatherer,
    date,
    is_promo
)
SELECT
    Nname,
    Ncode,
    Ncode_magiccards,
    Ncode_mtgnet,
    Ncode_gatherer,
    STR_TO_DATE(Ndate, '%m/%y'),
    Nis_promo
FROM gatherer_db.nsets;


DELETE FROM rhox_db.Card;
ALTER TABLE rhox_db.Card AUTO_INCREMENT = 1;
INSERT INTO rhox_db.Card (
    edition_id,
    multiverse_id,
    name,
    type,
    rarity,
    mana_cost,
    converted_mana,
    power,
    toughness,
    loyalty,
    ability,
    flavor,
    artist,
    number,
    rating,
    color,
    price,
    price_mtgnet,
    price_planeswalker,
    price_flamberg,
    price_dwarf,
    price_min,
    price_max,
    price_avg      
)
SELECT
    edition.id,
    card.Nid,
    card.Nname,
    card.Ntype,
    card.Nrarity,
    card.Nmanacost,
    card.Nconverted_manacost,
    card.Npower,
    card.Ntoughness,
    card.Nloyalty,
    card.Nability,
    card.Nflavor,
    card.Nartist,
    card.Nnumber,
    card.Nrating,
    card.Ncolor,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0
FROM gatherer_db.ncards card
JOIN rhox_db.Edition edition 
ON card.Nset=edition.code; 


