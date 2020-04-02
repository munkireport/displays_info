// Formatters
var displayTypeFormat = function(colNumber, row){
    var col = $('td:eq('+colNumber+')', row),
        status = col.text();
    status = status == 1 ? i18n.t('displays_info.external') : //ex
    (status == '0' ? i18n.t('displays_info.internal') : '')
    col.text(status)
}

var vendorFormat = function(colNumber, row){
    // Translating vendors column
    // todo: find how the hell Apple translates the EDID/DDC to these values
    // http://ftp.netbsd.org/pub/NetBSD/NetBSD-current/src/sys/dev/videomode/ediddevs
    // https://github.com/GNOME/gnome-desktop/blob/master/libgnome-desktop/gnome-pnp-ids.c
    // https://www.opensource.apple.com/source/xnu/xnu-124.7/iokit/Families/IOGraphics/AppleDDCDisplay.cpp
    var col = $('td:eq('+colNumber+')', row),
        vendor = col.text();
    col.text(display_vendors[vendor] || vendor);

}

var naSerialFormat = function(colNumber, row){
    // Blank n/a display serial numbers
    var col = $('td:eq('+colNumber+')', row),
        naserial = col.text();
    naserial = naserial == 'n/a' ? '' :
    (naserial === ' ' ? '' : naserial)
    col.text(naserial)
}

var manufacturedFormat = function(colNumber, row){
    // Format manufactured from unix to human friendly and the title to relative
    var col = $('td:eq('+colNumber+')', row),
        date = col.text();
    if(moment(date, 'YYYY-W', true).isValid() && date.toLowerCase().indexOf("model") === -1)
    {
        var formatted='<time title="'+ moment(date, 'YYYY-W').fromNow() + '" </time>' + moment(date, 'YYYY-W').format("MMMM Do, YYYY");
        col.html(formatted);
    } else if (date) {
        col.text(date)
    }
}

// Filters
var displayTypeFilter = function(colNumber, d){
    // Look for 'external' keyword
    if(d.search.value.match(/^external$/))
    {
        // Add column specific search
        d.columns[colNumber].search.value = '= 1';
        // Clear global search
        d.search.value = '';
    }

    // Look for 'internal' keyword
    if(d.search.value.match(/^internal/))
    {
        // Add column specific search
        d.columns[colNumber].search.value = '= 0';
        // Clear global search
        d.search.value = '';
    }
}

// Lookup table for display vendors
var display_vendors = {
    "610": "Apple",
    "10ac": "Dell",
    "5c23": "Wacom",
    "4d10": "Sharp",
    "1e6d": "LG",
    "38a3": "NEC",
    "4c49": "SMART Technologies",
    "9d1": "BenQ",
    "4dd9": "Sony",
    "472": "Acer",
    "22f0": "HP",
    "34ac": "Mitsubishi",
    "5a63": "ViewSonic",
    "4c2d": "Samsung",
    "593a": "Vizio",
    "d82": "CompuLab",
    "3023": "LaCie",
    "3698": "Matrox",
    "4ca3": "Epson",
    "170e": "Extron",
    "e11": "Compaq",
    "24d3": "ASK Proxima",
    "410c": "Philips",
    "15c3": "Eizo",
    "26cd": "iiyama",
    "7fff": "Haier",
    "3e8d": "Optoma",
    "5262": "Toshiba",
    "34a9": "Panasonic",
    "6318": "Panasonic",
    "5e3": "AOC",
    "30ae": "Lenovo",
    "469": "Asus",
    "6b3": "Asus",
    "68c": "Atlona",
    "4249": "Insignia",
    "41d2": "Planar",
    "5c85": "Westinghouse",
    "c87": "Christie",
    "2247": "Bush",
    "34a4": "Medion",
    "1ab3": "Fujitsu",
    "2db2": "Kramer Electronics",
    "6161706c": "AirPlay"
}
