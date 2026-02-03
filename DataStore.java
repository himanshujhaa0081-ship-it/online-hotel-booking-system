import java.util.*;

public class DataStore {

    private static final List<Room> rooms = new ArrayList<>();
    private static final List<Booking> bookings = new ArrayList<>();
    private static final List<Payment> payments = new ArrayList<>();

    public static List<Room> getRooms() {
        return rooms;
    }

    public static Room addRoom(String roomType, double price) {
        Room room = new Room(
                UUID.randomUUID().toString(),
                roomType,
                price,
                true
        );
        rooms.add(room);
        return room;
    }

    public static List<Booking> getBookings() {
        return bookings;
    }

    public static List<Payment> getPayments() {
        return payments;
    }

    public static double totalRevenue() {
        return payments.stream()
                .mapToDouble(Payment::getAmount)
                .sum();
    }
}
